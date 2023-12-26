<!-- Modal -->
<div class="modal fade" id="edit{{ $test->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{trans('Services.edit_Service')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('tests.update', $test->id ) }}" method="post">
                {{ method_field('patch') }}
                {{ csrf_field() }}
                @csrf
                <div class="modal-body">
                    <label for="name">Test Name</label>
                    <input type="text" name="test_name" id="test_name" value="{{$test->name}}" class="form-control"><br>

                    <input type="hidden" name="id" value="{{$test->id}}" class="form-control"><br>

                    <label for="test_price">Price</label>
                    <input type="number" name="test_price" id="test_price" value="{{$test->price}}"
                        class="form-control"><br>

                    <label for="discription">Description</label>
                    <textarea class="form-control" name="discription" id="discription"
                        rows="5">{{$test->discription}}</textarea>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">{{trans('Dashboard/sections_trans.Close')}}</button>
                    <button type="submit" class="btn btn-primary">{{trans('Dashboard/sections_trans.submit')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>