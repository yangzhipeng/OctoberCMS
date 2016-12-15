          @if(count($messages) > 0)
         
                          <ul id="itemContainer">
                            @foreach($messages as $message)
                             @if($message->reply_content != NULL)
                           <label> <li><a href="{{URL::to('/message').'/'.$message->id}}" style="text-decoration:none; color:black;"><p style="font-size:14px;font-weight: normal;">
                            {{ $message->subject }}&nbsp;✓</p></a></li></label>
                                    <label class="reply_notice">（已于  <span style="color:red;">{{ date('Y-m-d',strtotime($message->updated_at)) }}</span>   答复）</label>
                                    <br/>
                                    @else
                                     <label> <li><a href="{{URL::to('/message').'/'.$message->id}}" style="text-decoration:none; color:black;"><p style="font-size:14px;font-weight: normal;">
                            {{ $message->subject }}</p></a></li></label>
                                    <label class="reply_notice">（未答复）</label>
                                    <br/>
                                    @endif
                            @endforeach
                          </ul>

                        @endif
              
 

     {!! $messages->render() !!} 
            
