<h1><?= $pageTitle ?></h1>

<form action="" method="post">
        <div class="mb-3">
            <label for="title" class="form-label">Tittle</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="user" class="form-label">User</label>
            <input type="number" class="form-control" id="user" name="user">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea id="content" class="form-control" name="content"></textarea>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form> 