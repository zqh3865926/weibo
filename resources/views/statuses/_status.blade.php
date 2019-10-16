<li class="media mt-4 mb-4">
    <a href="{{ route('users.show',$user->id) }}">
        <img src="{{ $user->gravatar() }}" alt="" class="mr-3 gravatar">
    </a>
    <div class="media-body">
        <h5 class="mt-0 mb-1">
            {{ $user->name }}
            <small>
                /{{ $status->created_at->diffForHumans() }}
            </small>
        </h5>
        {{ $status->content }}
    </div>
    @can('destroy',$status)
        <form action="{{ route('statuses.destroy',$status) }}" method="post"
        onsubmit="return confirm('是否确定删除该条微博内容?')">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button type="submit" class="btn btn-sm btn-danger">删除</button>
        </form>
    @endcan
</li>