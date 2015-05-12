<section ng-controller="AddLogController as addLog">

    <h2>Add Log</h2>

    <form>
        <p>
            <h3>How are you feeling?</h3>
            <input type="text" ng-model="addLog.emotion_val" list="emotions_list" style="width: 90%; float: left;">
            <i class="fa fa-plus fa-2x" style="float: right;" ng-click="addLog.addEmotionValue()"></i>
            <datalist id="emotions_list">
                <option ng-repeat="emotion in addLog.emotions" data-id="{{emotion.id}}" value="{{emotion.emotion}}">
            </datalist>
        </p>
        <p>
            <span ng-repeat="emotion_selected in addLog.emotion_values" class="round label emotion">{{emotion_selected}}</span>
        </p>
        <p>
            <h3>What have you eaten?</h3>
            <input type="text" ng-model="addLog.food_val" list="food_list" style="width: 90%; float: left;">
            <i class="fa fa-plus fa-2x" style="float: right;" ng-click="addLog.addFoodValue()"></i>
            <datalist id="food_list">
                <option ng-repeat="food in addLog.foods" data-id="{{food.id}}" value="{{food.food}}">
            </datalist>
        </p>
        <p>
            <span ng-repeat="food_selected in addLog.food_values" class="round label food">{{food_selected}}</span>
        </p>
        <label>
            <textarea placeholder="Any notes?" rows="5"></textarea>
        </label>

        <button style="width: 100%;">Add log</button>
    </form>

</section>
