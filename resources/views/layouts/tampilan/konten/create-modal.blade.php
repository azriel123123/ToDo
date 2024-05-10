<div class="modal fade" id="createModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Activity</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{route('task.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="modal-body">
                    <div class="col-12">
                        <label for="taskName" class="form-label">Nama Kegiatan</label>
                        <input type="text" class="form-control" id="taskName" name="name" value="{{old('name')}}">
                    </div>
                    <div class="col-12">
                        <label for="categoryName" class="form-label">Deadline</label>
                        <input type="date" class="form-control" id="taskDate" name="date">
                    </div>
                    <div class="col-sm-10 mt-3">
                    <label for="categoryName" class="form-label">Status</label>
                        <select class="form-select" name="proses" aria-label="Default select example">
                            <option selected>--Select Status--</option>
                            <option value="On Going">On Going</option>
                            <option value="Done">Done</option>
                            <option value="Not yet" >Not Yet</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Add <i class="bi bi-check"></i></button>
                    </div>
            </form>

        </div>
    </div>
</div>