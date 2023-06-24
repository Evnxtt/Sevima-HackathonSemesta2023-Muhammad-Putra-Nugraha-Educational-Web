<form action="/user/store" method="post">
@csrf
    <input type="text" name="name" placeholder="nama" required>
    <input type="email" name="email" placeholder="email" required>
    <input type="password" name="password" placeholder="password" required>
    <input type="submit" name="submit" value="registrasi">
</form>