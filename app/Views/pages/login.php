<?=$this->extend('layouts/main')?>

<?=$this->section('content')?>

<div class="page-wrapper">
    <div class="login-form">
        <div class="card">
            <div class="card-content">
                <h2>Login to your account</h2>

                <form action="">
                    <div class="form-item">
                        <label for="username">User Name</label>
                        <input type="text" id="username" name="username">
                    </div>
                    <div class="form-item">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password">
                    </div>
                    <div class="form-item">
                        <button type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?=$this->endSection()?>