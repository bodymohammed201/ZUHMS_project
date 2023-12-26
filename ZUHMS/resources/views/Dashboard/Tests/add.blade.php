<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Test</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('tests.store') }}" method="post" autocomplete="off">
                @csrf
                <div class="modal-body">
                    <label for="test_name">Test Name</label>
                    <input type="text" name="test_name" id="test_name" class="form-control"><br>

                    <label for="test_price">Price</label>
                    <input type="number" name="test_price" id="test_price" class="form-control"><br>

                    <label for="discription">Description</label>
                    <textarea class="form-control" name="discription" id="discription" rows="5"></textarea>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>