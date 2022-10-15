{include file="header.tpl" }

<div class="mt-5 w-25 mx-auto">
    <form method="POST" action="verify">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" required class="form-control" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" required class="form-control">
        </div>

        {if $error} 
            <div class="alert alert-danger mt-3">
                {$error}
            </div>
        {/if}
        <button type="submit" class="btn btn-primary mt-3">Log in</button>
    </form>
</div>


{include file="footer.tpl" }