<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>To-do List</title>
    <style>
        .status {
            text-decoration: line-through;
        }
    </style>
</head>
<body>
<?php
require 'view/partials/navbar.php';
?>
<div class="container mt-4">
    <h1 class="mt-5">To-do List</h1>
    <form action="/todos" method="POST" class="mb-3">
        <div class="input-group">
            <input type="hidden" name="action" value="add">
            <input type="text" name="title" class="form-control" placeholder="New to-do" required>
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Add</button>
            </div>
        </div>
    </form>
    <ul class="list-group">
        <?php
        
        global $todos;
        foreach ($todos as $todo): ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <form action="/toggle" method="POST" class="mr-3">
                    <input type="hidden" name="action" value="toggle">
                    <input type="hidden" name="id" value="<?php echo $todo['id']; ?>">
                    <input type="checkbox"
                           onChange="this.form.submit()" <?php if ($todo['status']) echo 'checked'; ?>>
                </form>
                <span class="<?php echo $todo['status'] ? 'status' : ''; ?>">
                    <?php echo htmlspecialchars($todo['title']); ?>
                </span>
                <a href="/delete?id=<?php echo $todo['id']; ?>"
                   class="btn btn-danger btn-sm">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
</body>
</html>
