<!DOCTYPE html>
<html>
<head>
    <title>Halaman Registrasi</title>
</head>
<body>

    <h1>Halaman Registrasi</h1>

    <form>
        <ul>
            <li>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username">
            </li>

            <li>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
            </li>

            <li>
                <label for="konfirmasi">Konfirmasi Password:</label>
                <input type="password" id="konfirmasi" name="konfirmasi">
            </li>

            <li>
                <label for="role">Role:</label>
                <select id="role" name="role">
                    <option value="">Pilih Role</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
            </li>

            <li>
                <button type="submit">Register!</button>
            </li>
        </ul>
    </form>

</body>
</html>