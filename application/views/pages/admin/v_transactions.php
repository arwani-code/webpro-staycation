<section class="transactions overview overflow-auto">
<?php foreach($admin as $adm): ?>
        <section class="sidebar">
                    <div class="content pt-50 pb-30 ps-30">
                        <div class="user text-center pb-50 pe-30">
                            <img src="<?= base_url(); ?>assets/img/<?= $adm->imageUrl; ?>
                            " width="90" height="90" class="img-fluid mb-20 rounded-circle" />
                            <h2 class="fw-bold text-xl color-palette-1 m-0">Admin</h2>
                            <p class="color-palette-2 m-0"><?= $adm->email; ?>
                            </p>
                        </div>
                        <div class="menus">
                            <div class="item mb-30">
                                <svg class="icon me-3" width="25" height="25" viewBox="0 0 25 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.9033 14.7502H14.9033V21.7502H21.9033V14.7502Z" stroke="#7E8CAC"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M10.9033 14.7502H3.90332V21.7502H10.9033V14.7502Z" stroke="#7E8CAC"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M21.9033 3.75024H14.9033V10.7502H21.9033V3.75024Z" stroke="#7E8CAC"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M10.9033 3.75024H3.90332V10.7502H10.9033V3.75024Z" stroke="#7E8CAC"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <p class="item-title m-0">
                                    <a href="<?= base_url("admin_controller/"); ?>
                                    " class="text-lg text-decoration-none">Overview</a>
                                </p>
                            </div>
                            <div class="item mb-30 active">
                                <svg class="icon me-3" width="25" height="25" viewBox="0 0 25 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.90332 2.41406L3.90332 6.41406V20.4141C3.90332 20.9445 4.11403 21.4532 4.48911 21.8283C4.86418 22.2033 5.37289 22.4141 5.90332 22.4141H19.9033C20.4338 22.4141 20.9425 22.2033 21.3175 21.8283C21.6926 21.4532 21.9033 20.9445 21.9033 20.4141V6.41406L18.9033 2.41406H6.90332Z"
                                        stroke="#7E8CAC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M16.9033 10.4141C16.9033 11.4749 16.4819 12.4923 15.7317 13.2425C14.9816 13.9926 13.9642 14.4141 12.9033 14.4141C11.8425 14.4141 10.825 13.9926 10.0749 13.2425C9.32475 12.4923 8.90332 11.4749 8.90332 10.4141"
                                        stroke="#7E8CAC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M3.90332 6.41406H21.9033" stroke="#7E8CAC" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <p class="item-title m-0">
                                    <a href="<?= base_url("admin_controller/transaction"); ?>
                                    " class="text-lg text-decoration-none">Transactions</a>
                                </p>
                            </div>
                            <div class="item mb-30">
                                <svg class="icon me-3" width="25" height="25" viewBox="0 0 25 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M21.9033 11.9141C21.9068 13.234 21.5984 14.536 21.0033 15.7141C20.2978 17.1258 19.2131 18.3133 17.8708 19.1434C16.5285 19.9735 14.9816 20.4135 13.4033 20.4141C12.0835 20.4175 10.7814 20.1092 9.60332 19.5141L3.90332 21.4141L5.80332 15.7141C5.20825 14.536 4.89988 13.234 4.90332 11.9141C4.90393 10.3358 5.34393 8.78894 6.17404 7.44664C7.00415 6.10434 8.19157 5.01966 9.60332 4.31409C10.7814 3.71902 12.0835 3.41065 13.4033 3.41409H13.9033C15.9877 3.52908 17.9564 4.40885 19.4325 5.88495C20.9086 7.36105 21.7883 9.32974 21.9033 11.4141V11.9141Z"
                                        stroke="#7E8CAC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <p class="item-title m-0">
                                    <a href="<?= base_url("admin_controller/booking"); ?>
                                    " class="text-lg text-decoration-none">Booking</a>
                                </p>
                            </div>
                            <div class="item mb-30">
                                <svg class="icon me-3" width="25" height="25" viewBox="0 0 25 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path
                                            d="M21.9033 4.41406H3.90332C2.79875 4.41406 1.90332 5.30949 1.90332 6.41406V18.4141C1.90332 19.5186 2.79875 20.4141 3.90332 20.4141H21.9033C23.0079 20.4141 23.9033 19.5186 23.9033 18.4141V6.41406C23.9033 5.30949 23.0079 4.41406 21.9033 4.41406Z"
                                            stroke="#7E8CAC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M1.90332 10.4141H23.9033" stroke="#7E8CAC" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect width="24" height="24" fill="white" transform="translate(0.90332 0.414062)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <p class="item-title m-0">
                                    <a href="<?= base_url("admin_controller/bank"); ?>
                                    " class="text-lg text-decoration-none">Bank</a>
                                </p>
                            </div>
                            <div class="item mb-30">
                                <svg class="icon me-3" width="25" height="25" viewBox="0 0 25 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.2634 7.05396C20.5218 8.31274 21.3787 9.9164 21.7257 11.6621C22.0728 13.4079 21.8944 15.2173 21.2131 16.8617C20.5318 18.5061 19.3782 19.9115 17.8983 20.9003C16.4183 21.8891 14.6783 22.4169 12.8984 22.4169C11.1185 22.4169 9.37859 21.8891 7.89861 20.9003C6.41864 19.9115 5.26508 18.5061 4.58381 16.8617C3.90253 15.2173 3.72413 13.4079 4.07116 11.6621C4.41819 9.9164 5.27506 8.31274 6.53344 7.05396"
                                        stroke="#7E8CAC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12.9033 2.41406V12.4141" stroke="#7E8CAC" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <p class="item-title m-0">
                                    <a href="<?= base_url("admin_controller/log_out"); ?>
                                    " class="text-lg text-decoration-none">Log Out</a>
                                </p>
                            </div>
                        </div>
                    </div>
        </section>
<?php endforeach; ?>    
        <main class="main-wrapper transactions-detail">
            <div class="ps-lg-0">
                <h2 class="text-4xl fw-bold color-palette-1 mb-30">Transactions</h2>
                <div class="mb-30">
                    <p class="text-lg color-palette-2 mb-12">Total Spent</p>
                    <h3 class="text-5xl fw-medium color-palette-1">Rp <?= number_format($total,2,',','.'); ?></h3>
                </div>
                <div class="row mt-30 mb-20">
                    <div class="col-lg-12 col-12 main-content">
                        <div id="list_status_title">
                            <a data-filter="*" href="#" class="btn btn-status rounded-pill text-sm btn-active me-3">All
                                Ctgr</a>
                            <a data-filter="Hotel" href="#"
                                class="btn btn-status rounded-pill text-sm me-3">Hotel</a>
                            <a data-filter="House" href="#"
                                class="btn btn-status rounded-pill text-sm me-3">House</a>
                            <a data-filter="Villa" href="#" class="btn btn-status rounded-pill text-sm me-3">Villa</a>
                            <a data-filter="Pantai" href="#" class="btn btn-status rounded-pill text-sm me-3">Pantai</a>
                            <a data-filter="Apartemen" href="#" class="btn btn-status rounded-pill text-sm me-3">Apartemen</a>
                        </div>
                    </div>
                </div>
                <div class="latest-transaction">
                    <p class="text-lg fw-medium color-palette-1 mb-14">Catgories</p>
                    <div class="main-content main-content-table overflow-auto">
                        <table class="table table-borderless">
                            <thead>
                                <tr class="color-palette-1">
                                    <th class="" scope="col">Booking</th>
                                    <th scope="col">Order Id</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody id="list_status_item">
                            <?php foreach($bookings as $booking): ?>
                                                        <tr data-category="<?= $booking->category_order; ?>
                                                        " class="align-middle">
                                                            <th scope="row">
                                                                <img class="float-start me-3 mb-lg-0 mb-3" src="<?= base_url(); ?>assets/img/<?= $booking->imageUrl; ?>
                                                                "
                                                                    width="150" height="100" alt="">
                                                                <div class="game-title-header mt-4">
                                                                    <p class="game-title fw-medium text-start color-palette-1 m-0"><?= $booking->name_order; ?>
                                                                    </p>
                                                                    <p class="text-xs fw-normal text-start color-palette-0 m-0"><?= $booking->category_order; ?>
                                                                    </p>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <p class="fw-medium color-palette-1 m-0">#<?= $booking->id_user; ?>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <p class="fw-medium color-palette-1 m-0"><?= $booking->username; ?>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <p class="fw-medium color-palette-1 m-0">
                                                                   <?= $booking->price_total; ?>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <a href="<?= base_url(); ?>admin_controller/detail_transaction/<?= $booking->id_user; ?>" class="btn btn-status rounded-pill text-sm">Detail</a>
                                                            </td>
                                                        </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </section>

    <script>
        $(document).ready(function () {
            $(".btn-status").click(function () {
                $(this).addClass("btn-active");
                $(".btn-status").not(this).removeClass("btn-active");
            });


            $('#list_status_title a').click(function (event) {
                var filter = $(event.target).attr('data-filter');
                $('#list_status_item tr').each(function () {
                    var item = $(this);
                    console.log(item.attr('data-category').indexOf(filter) != -1);

                    if (filter == '*' || (item.attr('data-category').indexOf(filter) != -1))
                        item.show();
                    else
                        item.hide();
                });
            });
        });
    </script>