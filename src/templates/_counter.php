<div class="counter">  
    <div class="row p-3 h-100">
        <div class="col text-success pt-4 my-auto">
            <div class="text-center">
                <img class="icon-secondary" src="./assets/icons/arrow-right-green.svg" alt="">
                <h6 class="count"><?= $recordDataHandler->extractEntriesCount($roomRecords) ?></h6>
                <h6 class="count-text">Entrées</h6>
            </div>
        </div>
        <div class="col-4 text-info my-auto">
            <div class="text-center">
                <img class="icon-primary" src="./assets/icons/people-fill.svg" alt="">
                <h6 class="count"><?= $recordDataHandler->extractCurrentsCount($roomRecords) ?></h6>
                <h6 class="count-text">À l'intérieur</h6>
            </div>
        </div>
        <div class="col text-danger pt-4 my-auto">
            <div class="text-center">
                <img class="icon-secondary" src="./assets/icons/arrow-right-red.svg" alt="">
                <h6 class="count"><?= $recordDataHandler->extractExitsCount($roomRecords) ?></h6>
                <h6 class="count-text">Sorties</h6>
            </div>
        </div>
    </div>
</div>