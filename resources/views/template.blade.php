<div class="container col-xl-10 col-xxl-8 px-4 py-5">

    <div class="row">
        <div class="alert alert-danger" role="alert">
            A simple primary alert—check it out!
        </div>
    </div>
    <div class="row">
        <form method="post" action="/logout">
            <button class="w-15 btn btn-lg btn-danger" type="submit">Sign Out</button>
        </form>
    </div>
    <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 mb-3">Todolist</h1>
            <p class="col-lg-10 fs-4">by <a target="_blank" href="https://www.programmerzamannow.com/">Programmer Zaman Now</a></p>
        </div>
        <div class="col-md-10 mx-auto col-lg-5">
            <form class="p-4 p-md-5 border rounded-3 bg-light" method="post" action="/todolist">
                <div class="form-floating mb-3">
                    <label for="todo">Todo
                        <input type="text" class="form-control" name="todo" placeholder="todo">
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Add Todo</button>
            </form>
        </div>
    </div>
    <div class="row align-items-right g-lg-5 py-5">
        <div class="mx-auto">
            <form id="deleteForm" method="post" style="display: none">

            </form>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Todo</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Belajar Laravel Dasar</td>
                    <td>
                        <button class="w-100 btn btn-lg btn-danger" type="submit">Remove</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
