@include('componets.header')
@if($errors->any())
    <div style="color:red"></div>
    @foreach ($errors->all() as $error )
    <p>[{$error}]</p>
        
    @endforeach


<form method="POST" action="{{route('register')}}">
    @csrf
    <p>Name</p>
    <input name ="name" type="text" required>
    <p>Email</p>
    <input type="email" name="email" required>
    <p>password</p>
    <input type="password" name="password"required>
    <p>password_confirmation</p>
    <input type="password" name="password_confirmation"required>
    <input type="submit">
</form>

@include('components.footer')