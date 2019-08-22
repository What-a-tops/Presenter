<div class="modal fade" id="addSongModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header uniColor">
                <h5 class="modal-title text-white" id="exampleModalLabel">Add Song</h5>
            </div>
            <div class="modal-body">
                <form id="saveSong">
                    <div class="form-group">
                        <label for="title-name" class="col-form-label text-white teal">Title:</label>
                        <input type="text" class="form-control text-white" id="title-name" placeholder="Enter Title" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="author-name" class="col-form-label text-white teal">Author:</label>
                        <input type="text" class="form-control " id="author-name" placeholder="Enter Author" required autofocus>
                    </div>

                    <div id="lyrics_list">
                        <div class="form-group" id="list-0">
                            <label for="message-text" class="col-form-label text-white teal">Lyrics:</label>
                            <textarea class="form-control lyrics-text" id="message-text" placeholder="Enter Lyrics" required></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="button" id="appendText" class="btn btn-info btn-color btn-sm border">
                            <i class="fas fa-plus"></i>
                        </button>
                        <button type="button" id="removeText" class="btn btn-danger btn-sm border border-white">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>


            </div>
            <div class="modal-footer uniColor">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn uniColor text-white border-white">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-white" id="exampleModalLabel">Delete Song</h5>
            </div>
            <div class="modal-body text-white text-center">
                Are you sure you want to delete this list?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="removeListService" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-white" id="exampleModalLabel">Remove List</h5>
            </div>
            <div class="modal-body text-white text-center">
                Are you sure you want to remove this list from service?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger">Remove</button>
            </div>
        </div>
    </div>
</div>
