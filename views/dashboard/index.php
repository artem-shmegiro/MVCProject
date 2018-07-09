<form>
    <div class="parent">
        <div class="calcul">
            <div class="form-group">
                <div class="center">
                    <h2>Calculator</h2>
                </div>
            </div>
            <div class="form-group">
                <input type="number" name="first" class="form-control" placeholder="Enter the first number" required>
            </div>
            <div class="form-group">
                <input type="number" name="second" class="form-control" placeholder="Enter the second number" required>
            </div>
            <div class="form-group">
                <select class="form-control" name="operation" id="operation" required>
                    <option>+</option>
                    <option>-</option>
                    <option>*</option>
                    <option>/</option>
                </select>
            </div>
            <div class="form-group">
                <input type="number" name="result" class="form-control" placeholder="Result" disabled>
            </div>
            <button type="submit" name="calc" class="btn btn-warning btn-lg btn-block">Calculate</button>
        </div>
    </div>
</form>
