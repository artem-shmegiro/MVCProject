<form action="login/run" method="post">
    <div class="parent">
        <div class="login">
            <div class="form-group">
                <input type="text" name="login" class="form-control" placeholder="Login" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <table class="text">
                <tr>
                    <td>
                        <div class="checkbox">
                            <label>
                              <input type="checkbox" name="save" value="1">Remember me
                          </label>
                        </div>
                    </td>
                    <td class="rightcol">
                        <div class="checkbox">
                            <a href="<?php echo URL; ?>registration">Register</a>
                        </div>
                    </td>
                </tr>
            </table>
            <button type="submit" class="btn btn-primary btn-block">Sign in</button>
        </div>
    </div>
</form>
