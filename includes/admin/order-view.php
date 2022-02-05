<div class="settings-row">
    <!-- <div class="row"> -->
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
            type="button" role="tab" aria-controls="pills-home" aria-selected="true">Settings</button>
        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
            type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Reports</button>
    </div>



    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"><?php order_settings(); ?>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="secondary-row">
                <ul class="nav nav-pills mb-3" id="pills-tab-secondary" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-last-1-year-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-last-1-year" type="button" role="tab"
                            aria-controls="pills-last-1-year" aria-selected="true">Last 1 Year</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-last-1-month-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-last-1-month" type="button" role="tab"
                            aria-controls="pills-last-1-month" aria-selected="false">Last 1 Month</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-last-1-week-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-last-1-week" type="button" role="tab"
                            aria-controls="pills-last-1-week" aria-selected="false">Last 1 Week</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-custom-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-custom" type="button" role="tab" aria-controls="pills-custom"
                            aria-selected="false">Custom</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent-secondary">
                    <div class="tab-pane fade show active" id="pills-last-1-year" role="tabpanel"
                        aria-labelledby="pills-last-1-year-tab"><?php order_reports($date = '1year'); ?>
                    </div>
                    <div class="tab-pane fade" id="pills-last-1-month" role="tabpanel"
                        aria-labelledby="pills-last-1-month-tab">
                        <?php order_reports($date = '1month'); ?>
                    </div>
                    <div class="tab-pane fade" id="pills-last-1-week" role="tabpanel"
                        aria-labelledby="pills-last-1-week-tab">
                        <?php order_reports($date = '1week'); ?>
                    </div>
                    <div class="tab-pane fade" id="pills-custom" role="tabpanel" aria-labelledby="pills-custom-tab">
                        <form>
                            <label for="start">Start date:</label>

                            <input type="date" id="start" name="trip-start">
                            <label for="start">End date:</label>
                            <input type="date" id="start" name="trip-start">
                            <button class='btn-primary'>Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- </div> -->
</div>