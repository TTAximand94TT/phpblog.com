
<div class="container mt-5">
    <div class="container">
        <div class="mb-3 text-center">
            <h3>Registration form</h3>
        </div>
        <div class="mb-3">
            <span class="message" hidden>Errors</span>
        </div>
        <form method="post" action="/account/registration" id="registration-form" novalidate>
            <div class="mb-3 input-control">
                <label for="login" class="form-label">Login:</label>
                <input type="text" id="login" name="login" class="form-control form-input" required minlength="3">
                <span class="error"></span>
            </div>
            <div class="mb-3 input-control">
                <label for="password" class="form-label">Password:</label>
                <input type="password" id="password" name="password" required minlength="8" pattern="(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z!@#$%^&*]{6,}"  class="form-control form-input">
                <span class="error"></span>
            </div>
            <div class="mb-3 input-control">
                <label for="confirm-password" class="form-label">Confirm password:</label>
                <input type="password" name="confirmPassword" id="confirm-password" required minlength="8" class="form-control form-input">
                <span class="error"></span>
            </div>
            <div class="mb-3 input-control">
                <label for="email" class="form-label">Email address:</label>
                <input type="email" name="email" class="form-control form-input" required minlength="6" id="email">
                <span class="error"></span>
            </div>
            <div class="mb-3 input-control">
                <label for="user-name" class="form-label">Name:</label>
                <input type="text" name="name" class="form-control form-input" required minlength="3" id="user-name">
                <span class="error"></span>
            </div>
            <div class="mb-3">
                <input type="reset" class="btn btn-secondary">
                <input type="submit" class="btn btn-primary" value="Registration">
            </div>
        </form>
    </div>
</div>

