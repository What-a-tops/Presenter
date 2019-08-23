<div class="container-fluid">
    <div class="row h-815 overflow-x">
        <div class="col-3 border-secondary">
            <div class="menus-1 ">
                <div class="row">
                    <div class="col-4 mg-left-8">
                        <button type="button" data-toggle="modal" data-tooltip="tooltip" data-placement="top" title="Add New" data-target="#addSongModal" data-backdrop="static" data-keyboard="false" class="btn btn-info btn-color btn-sm border border-btn"><i class="fas fa-plus"></i></button>
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
                        <button type="button" id="deleteList" data-toggle="modal" data-tooltip="tooltip" data-placement="top" title="Delete" data-target="#deleteModal" class="btn btn-sm btn-danger border-danger"><i class="fas fa-trash-alt"></i></button>
                        <button type="button" class="btn btn-sm btn-color border-btn text-white" data-tooltip="tooltip" data-placement="top" title="Send to Service"><i class="fas fa-share-square"></i></button>
                    </div>
                </div>
            </div>
            <div class="list-datas-h-784 overflow-x border-left border-right border-bottom border-secondary">
                <table class='table table-hover pointer text-white border-bottom border-secondary' id="list_table"></table>
            </div>
        </div>

        <div class="col-9 border border-secondary">
            <div class="row">
                <div class="panel-lists border-right border-secondary">
                    <div class="serve-1">
                        <p class="h4 text-white text-center service-list">Lists</p>
                        <div class="row" id="serve-lists">
                            <div class="col-1 mg-left-20">
                                <label class="chk-container">
                                    <input type="checkbox" class="chk-all-service mg-top-7" id="chk-all-service">
                                    <span class="checkmark mg-top-7"></span>
                            </div>
                            <div class="col-8">
                                <button type="button" id="deleteList" data-toggle="modal" data-target="#removeListService" data-tooltip="tooltip" data-placement="top" title="Remove" class="btn btn-sm btn-danger border-danger mg-top-7"><i class="fas fa-trash-alt"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="h-730-serlist overflow-x ">
                        <ul  class="list-group text-white pointer" id="list_tab"></ul>
                    </div>

                    <div class="border-top border-secondary btn-service">
                        <button type="button" class="btn btn-color btn-lg btn-block text-white" id="btn-present"><i class="fas fa-paper-plane"></i> Send to Present</button>
                    </div>
                </div>


                <div class="col-8 border-secondary o-auto">
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
                                            <video autoplay muted loop preload="none">
                                                <source src="https://mdbootstrap.com/img/video/Sail-Away.mp4" />
                                            </video>
                                            <div class="vert-center-text">
                                                <h2 id="preview_lists" class="text-white">Caption Text</h2>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <hr class="border-secondary">
                                <div class="flex-row overflow-y" id="list_data"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
