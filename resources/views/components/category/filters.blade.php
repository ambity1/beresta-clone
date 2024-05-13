<div class="categoryPage-filter">
    <form action="" method="get" class="hide" id="filters-reset">
    </form>
    <form action="" method="get" class="row row-fix filters" id="filters-submit">
        <div class="input-field price-sort">
            <label for="char-minprice" class="active">Цена</label>
            <div class="d-flex justify-content-between">
                <input name="minprice" id="char-minprice" placeholder="от  {{$minPrice}}">
                <input name="maxprice" id="char-maxprice" placeholder="до  {{$maxPrice}}">
            </div>
        </div>
    </form>
    <div class="control d-flex flex-column">
        <input type="submit" form="filters-submit" class="btn filter-submit" value="Применить">
        <input type="submit" form="filters-reset" class="filter-reset" value="Сбросить">
    </div>
</div>
