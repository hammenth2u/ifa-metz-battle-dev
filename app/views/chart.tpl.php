<div id="charts">
    <div class="chart_gender">
        <div class="all_barre">
            <div v-bind:style="women_style" > {{ women }}</div>
            <div v-bind:style="men_style" > {{ men }}</div>
            <div v-bind:style="other_style" > {{ other }}</div>
        </div>
        <div class="abscisse">
            <div v-for="item in abscisseGender" :key="item">
                <div> {{ item }} </div>
            </div>
        </div>

    </div>
    <div class="chart_age">
        <div class="all_barre">
            <div v-bind:style="firstAge_style" > {{ firstAge }}</div>
            <div v-bind:style="secondAge_style" > {{ secondAge }}</div>
            <div v-bind:style="thridAge_style" > {{ thridAge }}</div>
        </div>  
        <div class="abscisse">
            <div v-for="item in abscisseAge" :key="item">
                <div> {{ item }} </div>
            </div>
        </div>

    </div>
</div>

<script src="<?=$url?>/assets/js/chart.js"></script>