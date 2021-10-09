<div class="vue-admin-wrapper wrap">
    <h1>Vue Starter Admin</h1>

    <div class="vue-admin-content card-body mw-100">
        <ul class="nav nav-tabs" id="myTab" role="tablist">

            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#widgets" type="button" role="tab" aria-controls="profile" aria-selected="false"> <span class="dashicons dashicons-tagcloud"></span> Tab 1</button>
            </li>

            <li class="nav-item" role="presentation">
                <button class="nav-link" id="addons-tab" data-bs-toggle="tab" data-bs-target="#addons" type="button" role="tab" aria-controls="contact" aria-selected="false"> <span class="dashicons dashicons-book"></span> Tab 2</button>
            </li>

            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false"> <span class="dashicons dashicons-pets"></span> Tab 3</button>
            </li>

        </ul>
        <ul>
        </ul>
        <div class="tab-content bg-white" id="myTabContent">

            <div class="tab-pane fade show active" id="widgets" role="tabpanel" aria-labelledby="profile-tab">
                Tab 1
            </div>

            <div class="tab-pane fade" id="addons" role="tabpanel" aria-labelledby="addons-tab">
               Tab 2
            </div>

            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
               Tab 3
            </div>


        </div>
    </div>
</div>