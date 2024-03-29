<?php namespace RainLab\Blog;

use Backend;
use Controller;
use System\Classes\PluginBase;
use RainLab\Blog\Classes\TagProcessor;
use RainLab\Blog\Models\Category;
use Event;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'rainlab.blog::lang.plugin.name',
            'description' => 'rainlab.blog::lang.plugin.description',
            'author'      => 'Alexey Bobkov, Samuel Georges',
            'icon'        => 'icon-pencil',
            'homepage'    => 'https://github.com/rainlab/blog-plugin'
        ];
    }

    public function registerComponents()
    {
        return [
            'RainLab\Blog\Components\Post'       => 'blogPost',
            'RainLab\Blog\Components\Posts'      => 'blogPosts',
            'RainLab\Blog\Components\Categories' => 'blogCategories',
            'RainLab\Blog\Components\RssFeed'    => 'blogRssFeed',
        ];
    }

    public function registerPermissions()
    {
        return [
            'rainlab.blog.access_posts'         => ['tab' => 'rainlab.blog::lang.blog.tab', 'label' => 'rainlab.blog::lang.blog.access_posts'],
            'rainlab.blog.access_categories'    => ['tab' => 'rainlab.blog::lang.blog.tab', 'label' => 'rainlab.blog::lang.blog.access_categories'],
            'rainlab.blog.access_other_posts'   => ['tab' => 'rainlab.blog::lang.blog.tab', 'label' => 'rainlab.blog::lang.blog.access_other_posts'],
            'rainlab.blog.access_import_export' => ['tab' => 'rainlab.blog::lang.blog.tab', 'label' => 'rainlab.blog::lang.blog.access_import_export']
        ];
    }

    public function registerNavigation()
    {
        return [
            'blog' => [
                'label'       => '文章',
                'url'         => Backend::url('rainlab/blog/posts'),
                'icon'        => 'icon-pencil',
                'iconSvg'     => 'plugins/rainlab/blog/assets/images/blog-icon.svg',
                'permissions' => ['rainlab.blog.*'],
                'order'       => 30,

                'sideMenu' => [
                    'new_post' => [
                        'label'       => '新建文章',
                        'icon'        => 'icon-plus',
                        'url'         => Backend::url('rainlab/blog/posts/create'),
                        'permissions' => ['rainlab.blog.access_posts']
                    ],
                    'posts' => [
                        'label'       => '文章',
                        'icon'        => 'icon-copy',
                        'url'         => Backend::url('rainlab/blog/posts'),
                        'permissions' => ['rainlab.blog.access_posts']
                    ],
                    'categories' => [
                        'label'       => '作者',
                        'icon'        => 'icon-user',
                        'url'         => Backend::url('rainlab/blog/categories'),
                        'permissions' => ['rainlab.blog.access_categories']
                    ]
                ]
            ]
        ];
    }

    public function registerFormWidgets()
    {
        return [
            'RainLab\Blog\FormWidgets\Preview' => [
                'label' => 'Preview',
                'code'  => 'preview'
            ]
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     */
    public function register()
    {
        /*
         * Register the image tag processing callback
         */
        TagProcessor::instance()->registerCallback(function($input, $preview){
            if (!$preview) return $input;

            return preg_replace('|\<img src="image" alt="([0-9]+)"([^>]*)\/>|m',
                '<span class="image-placeholder" data-index="$1">
                    <span class="upload-dropzone">
                        <span class="label">Click or drop an image...</span>
                        <span class="indicator"></span>
                    </span>
                </span>',
            $input);
        });
    }

    public function boot()
    {
        /*
         * Register menu items for the RainLab.Pages plugin
         */
        Event::listen('pages.menuitem.listTypes', function() {
            return [
                'blog-category' => 'Blog Category',
                'all-blog-categories' => 'All Blog Categories'
            ];
        });

        Event::listen('pages.menuitem.getTypeInfo', function($type) {
            if ($type == 'blog-category' || $type == 'all-blog-categories')
                return Category::getMenuTypeInfo($type);
        });

        Event::listen('pages.menuitem.resolveItem', function($type, $item, $url, $theme) {
            if ($type == 'blog-category' || $type == 'all-blog-categories')
                return Category::resolveMenuItem($item, $url, $theme);
        });
    }
}
