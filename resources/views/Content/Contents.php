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
                        <button type="button" id="deleteList" data-toggle="modal" data-target="#deleteModal" class="btn btn-sm btn-danger border-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash-alt"></i></button>
                        <button type="button" class="btn btn-sm btn-color border-btn text-white" data-toggle="tooltip" data-placement="top" title="Send to Service"><i class="fas fa-share-square"></i></button>
                    </div>
                </div>
            </div>

            <table class='table table-hover pointer' id="list_table"></table>
        </div>
        <div class="col-9 border border-secondary ">
            <div class="row">
                <div class="panel-lists ">
                     <div class="list-group h-763-serlist overflow-x" id="list-tab" role="tablist">
                      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
                      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
                      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
                      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
                         <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
                      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
                      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
                      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
                           <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
                      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
                      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
                      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
                           <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
                      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
                      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
                      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
                           <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
                      <a class="list-group-item list-group-item-action" id="lst-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
                      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
                      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
                           <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
                      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
                      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
                      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
                    </div>

<!--                    <div class="col-12">-->
<!--                        <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>-->
<!--                    </div>-->


                </div>



                <div class="col-8 border-left border-secondary">
                    <div class="d-flex flex-row-reverse bd-highlight">

                        <div class="container">
                            <div class="row">
                                <div class="col-sm">
                                    <div class=" bd-highlight text-white f-25 lead">Senorita</div>
                                </div>

                                <div class="col-sm">
                                    <div class="d-flex flex-row-reverse bd-highlight">
                                        <div class="p2 bd-highlight float-right mg-top-3">
                                            <input id="toggle-live" type="checkbox" data-toggle="toggle" data-onstyle="success" data-height="10" data-size="small">
                                        </div>
                                        <div class=" bd-highlight text-white f-25 lead float-right">Live&nbsp;</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="d-flex justify-content-center" id="output_view">
                            <div class="container mg-bottom-15">
                                <div class="d-flex justify-content-center border border-secondary">
                                    <div class="play-view-list">
                                        <!--                                        <div class="inside contents-list display-3 lead text-white text-center h-450" id="preview_lists"><i class="fas fa-desktop text-muted display-1"></i></div>-->
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div id="preview_screen">
                                        <div class="video-default-view" id="default-prev">
                                            <div class="inside contents-list display-3 lead text-white text-center h-450" ><i class="fas fa-desktop text-muted display-1"></i></div>
                                        </div>

                                        <div class="col-xs-12 vert-center-container" id="play-view">
                                            <video autoplay muted loop>
                                                <source src="https://mdbootstrap.com/img/video/Sail-Away.mp4" />
                                            </video>
                                            <div class="vert-center-text">
                                                <h2 id="preview_lists" class="text-white">Caption Text</h2>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <hr>
                                <div class="container-fluid">
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
