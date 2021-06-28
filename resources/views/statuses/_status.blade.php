<li class="media mt-4 mb-4">
  <a href="{{ route('users.show', $user->id )}}">
    {{ $user->name }}
  </a>
  <div class="media-body">
    <h5 class="mt-0 mb-1">{{ $user->name }} <small> / {{ $status->created_at->diffForHumans() }}</small></h5>
    {{ $status->content }}
  </div>
</li>