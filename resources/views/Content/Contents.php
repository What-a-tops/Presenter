<div class="container-fluid">
    <div class="row h-815">
        <div class="col-3 border border-secondary">
            <div class="menus">
                <div class="row">
                    <div class="col-4">
                        <button type="button" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" class="btn btn-info btn-color btn-sm border border-secondary"><i class="fas fa-plus"></i></button>
                    </div>
                    <div class="col-8">
                        <input class="form-control form-control-sm border border-secondary" type="text" placeholder="Search">
                    </div>
                </div>
            </div>

            <table class='table table-hover pointer align-content-center' id="list_table"></table>
        </div>
        <div class="col-9 border border-secondary ">
            <div class="row">
                <div class="col-3 border border-secondary">
                    1
                </div>
                <div class="col-9 border border-secondary">
                    <div class="d-flex flex-row-reverse bd-highlight">
                        <div class="p-2 bd-highlight">
                            <input type="checkbox" checked data-toggle="toggle" data-onstyle="success" data-height="10">
                        </div>
                        <div class="p-2 bd-highlight text-white f-25 lead">Live</div>
                    </div>
                    <div class="container-fluid">

                        <div class="d-flex justify-content-center" id="output_view">

                            <div class="container">

                                <div class="d-flex justify-content-center border border-secondary h-450">
                                    <div class="contents-list">
                                        <div class="inside contents-list display-3 lead text-white text-center" id="preview_lists">Lorem Ipsum is simply dummy text of the printing</div>
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Song</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Title:</label>
            <input type="text" class="form-control" id="recipient-name" placeholder="Enter Title" required autofocus>
          </div>

           <div id="lyrics_list">
              <div class="form-group">
                <label for="message-text" class="col-form-label">Lyrics:</label>
                <textarea class="form-control" id="message-text" placeholder="Enter Lyrics" required></textarea>
              </div>
            </div>

          <div class="form-group">
              <button type="button" id="appendText" class="btn btn-info btn-color btn-sm border border-secondary">
                  <i class="fas fa-plus"></i>
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
