@extends('admin.mainLayout')

@section('title', $user->name)

@section('content')
<form action="{{ route('adminPanel.users.update', ['user' => $user->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="input-group">
        <label for="user_name" class="col-sm-2 col-form-label"><strong>Имя пользователя</strong></label>
        <input type="text" class="form-control" id="user_name" placeholder="Наименование" name="name" value="{{ $user->name }}">
    </div>
    <br>
    <div class="input-group">
        <label for="user_email" class="col-sm-2 col-form-label"><strong>e-mail</strong></label>
        <input type="email" class="form-control" id="user_email" placeholder="address@example.com" name="email" value="{{ $user->email }}">
        <div class="input-group-append">
            <span class="input-group-text" id="basic-addon3">@</span>
        </div>
    </div>
    <br>
    <h5>Роли</h5>
    @foreach($availableRoles as $role)
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="role_id" id="inlineRadio . {{ $role->id }}" value="{{ $role->id }}" @if($user->role->first() && $user->role->first()->id == $role->id) checked @endif>
        <label class="form-check-label" for="inlineRadio . {{ $role->id }}">{{ $role->role }}</label>
    </div>
    @endforeach
    <br>
    <br>
    <button type="submit" class="btn btn-outline-primary">Сохранить</button>
</form>
@endsection