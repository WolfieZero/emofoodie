<section ng-controller="AddLogController as addLog">

    <header class="row">
        <div class="column">
            <h2>Add Log</h2>
        </div>
    </header>

    <form>

        <div class="row">
            <h3 class="column">
                <i class="fa fa-heart"></i>
                How are you feeling?
            </h3>
            <div class="column small-11">
                <input type="text" ng-model="addLog.emotion_val" list="emotions_list">
                <datalist id="emotions_list">
                    <option ng-repeat="emotion in addLog.emotions" data-id="{{emotion.id}}" value="{{emotion.emotion}}">
                </datalist>
            </div>
            <div class="column small-1">
                <i class="fa fa-plus fa-2x" style="float: right;" ng-click="addLog.addEmotionValue()"></i>
            </div>
            <div class="column">
                <span ng-repeat="emotion_selected in addLog.emotion_values" class="round label emotion">{{emotion_selected}}</span>
            </div>
            <div class="column">&nbsp;</div>
        </div>

        <div class="row">
            <h3 class="column">
                <i class="fa fa-cutlery"></i>
                What have you eaten?
            </h3>
            <div class="column small-11">
                <input type="text" ng-model="addLog.food_val" list="food_list">
                <datalist id="food_list">
                    <option ng-repeat="food in addLog.foods" data-id="{{food.id}}" value="{{food.food}}">
                </datalist>
            </div>
            <div class="column small-1">
                <i class="fa fa-plus fa-2x" style="float: right;" ng-click="addLog.addFoodValue()"></i>
            </div>
            <div class="column">
                <span ng-repeat="food_selected in addLog.food_values" class="round label food">{{food_selected}}</span>
            </div>
            <div class="column">&nbsp;</div>
        </div>

        <div class="row">
            <div class="column">
                <textarea placeholder="Any notes?" rows="5"></textarea>
            </div>
            <div class="column">&nbsp;</div>
        </div>


        <div class="row">
            <div class="column">
                <button class="expand radius" type="submit">Add log</button>
            </div>
        </div>
    </form>

</section>
