<form action="{{ route('check') }}" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="">Your Plate Number</label>
        <input type="text" name="plate" placeholder="Input your plate numer: PAA4276" class="form-control">
    </div>
    <div class="row">
        <div class="col-sm-12 col-lg-6">
            <div class="form-group">
                <label for="">Date</label>
                <select name="date" class="form-control" >
                    <option value="">Select</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                    <option value="Saturday">Saturday</option>
                    <option value="Sunday">Sunday</option>
                </select>
            </div>
        </div>
        <div class="col-sm-12 col-lg-6">
            <div class="form-group">
                <label for="">Choose you time</label>
                <input type="time" name="time" value="08:00" class="form-control">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <button type="submit" class="btn btn-primary">Check</button>
        </div>
    </div>
</form>