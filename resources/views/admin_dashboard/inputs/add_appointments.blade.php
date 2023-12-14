<div class="col-12 mb-5 appointments table-responsive ">

    <h5 class="mt-4 mb-3">  Doctor Appointments : <span class="text-danger">*</span>  </h5>


    <div class="d-flex justify-content-end mb-2">
        <button type="button" class="btn btn-sm btn-success" id="addNewRow"><i class="lni lni-circle-plus ms-0"></i></button>
    </div>
    <table class="w-100 table table-striped table-hover table-bordered mb-0">
        <thead>
        <th>Day</th>
        <th>From Time</th>
        <th> To Time</th>
        <th> Remove</th>
        </thead>
        <tbody id="lines">
        <tr id="tr">

            <td>
                <select class="form-control" name="day[]" required>
                    <option value=""> Select Day... </option>
                    @foreach(days() as $key=>$val)
                        <option value="{{$val}}"> {{$val}} </option>
                    @endforeach
                </select>
            </td>
            <td>
                <input type="time" class="form-control" name="from[]"  required />
            </td>
            <td>
                <input type="time" class="form-control" name="to[]"  required />
            </td>
            <td>
                <button type="button" class="btn btn-sm btn-danger removeRow">
                    <i class="lni lni-trash m-0"></i>
                </button>
            </td>
        </tr>
        </tbody>
    </table>


</div>
