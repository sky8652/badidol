@if (count($topics))

    <div class="layui-col-md6 fly-home-jie">
        <div class="fly-panel">
            <h3 class="fly-panel-title">{{ $user->name }} 最近的提问</h3>
            <ul class="jie-row">
                @foreach ($topics as $topic)
                    <li>
                        <a href="{{ $topic->link() }}" class="jie-title"> {{ $topic->title }}</a>
                        <i>{{ $topic->created_at->diffForHumans() }}</i>
                        <em class="layui-hide-xs">{{ $topic->reply_count }} 回复</em>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

@else
    <div class="fly-none" style="min-height: 50px; padding:30px 0; height:auto;"><i style="font-size:14px;">没有发表任何求解</i>
    </div>
@endif
