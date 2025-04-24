<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <h2>User Profile</h2>
<form action="{{ route('profile.store') }}" method="POST">
            @csrf
            <div class="mb-3" class="form-label">
                <label for="name" >full name </label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="mb-3" class="form-label">
                <label for="email" >Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="mb_3">
            <label for="phone"  class="form-label">Phone number</label>
            <input type="number" name="phone" id="phone" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="user" class="form-label">About the user</label>
                <textarea name="user" id="user" class="form-control" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="photo" class="form-label"></label>
                <input type="file" name="photo" id="photo" class="form-control" required>
            </div>
             <button type="submit" class="btn btn-primary w-100"></button>
</body>
</html>
