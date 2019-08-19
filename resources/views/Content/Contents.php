<div class="container-fluid">
    <div class="row h-815">
        <div class="col-3 border-secondary">
            <div class="menus-1">
                <div class="row">
                    <div class="col-4 mg-left-8">
                        <button type="button" data-toggle="modal" data-target="#addSongModal" data-backdrop="static" data-keyboard="false" class="btn btn-info btn-color btn-sm border border-btn"><i class="fas fa-plus"></i></button>
                    </div>
                    <div class="col-7 pull-right mg-left-16">
                        <input class="form-control form-control-sm border-secondary border-secondary" type="text" placeholder="Search">
                    </div>
                </div>
            </div>

            <div class="menus-2 hidden_div">
                <div class="row">
                    <div class="col-1 mg-left-12">
                          <label class="chk-container">
                          <input type="checkbox" class="chk-all" id="chk-all">
                          <span class="checkmark"></span>
                    </div>
                    <div class="col-8">
                        <button type="button" class="btn btn-sm btn-danger border-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash-alt"></i></button>
                        <button type="button" class="btn btn-sm btn-color border-btn text-white" data-toggle="tooltip" data-placement="top" title="Send to Service"><i class="fas fa-share-square"></i></button>
                    </div>
                </div>
            </div>

            <table class='table table-hover pointer align-content-center' id="list_table"></table>
        </div>
        <div class="col-9 border border-secondary ">
            <div class="row">
                <div class="col-4 border-secondary">
                    1
                </div>
                <div class="col-8 border-left border-secondary">
                    <div class="d-flex flex-row-reverse bd-highlight">
                        <div class="p-2 bd-highlight">
                            <input type="checkbox" data-toggle="toggle" data-onstyle="success" data-height="10">
                        </div>
                        <div class="p-2 bd-highlight text-white f-25 lead">Live</div>
                    </div>
                    <div class="container-fluid">
                        <div class="d-flex justify-content-center" id="output_view">
                            <div class="container mg-bottom-15">
                                <div class="d-flex justify-content-center border border-secondary">
                                    <div class="contents-list">
                                        <div class="inside contents-list display-3 lead text-white text-center h-450" id="preview_lists">Hey</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="flex-row overflow-y" id="list_data"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addSongModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
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
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
