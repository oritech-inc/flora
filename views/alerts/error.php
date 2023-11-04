<div class="d-flex align-items-center" style="align-items:center;justify-content:center;">
    <main class="form-alerts w-25 m-auto text-center bg-body-tertiary rounded-4">
        <div class="card border-0">
            <div class="card-header text-uppercase h3 text-warning">
                Ooops!!!
            </div>
            <img class="card-img-top bg-0" src="<?= $root ?>/img/bg/icons/notify.svg" alt="notify" height="100">
            <div class="card-body">
                <h4 class="card-title h2 fs-b pt-2"></h4>
                <h5 class="h4 fs-b">Something went wrong</h5>
                <p class="card-text">
                    An unexpected error has occurred while loading the contents of this page,
                    This may be caused by:
                </p>
                <ol class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Your internet connection is weak
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Your device is low on memory(RAM)
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Your are using an old browser version
                    </li>
                </ol>
                <p class="card-text">
                    Please fix the above issues to continue and then click on
                    <kbd>Reload</kbd> button below to try again.
                </p>
            </div>
            <div class="card-footer">
                <a href="/" class="btn btn-outline-dark btn-block rounded-5">
                    RELOAD <i class="bi bi-arrow-repeat fa-pull-right"></i>
                </a>
            </div>
        </div>
    </main>
</div>