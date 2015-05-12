<section ng-controller="AddLogController as addLog">

    <h2>Add Log</h2>

    <form>
        <p>
            <h3>How are you feeling?</h3>
            <input type="text" ng-model="addLog.emotion_val" list="emotions" style="width: 90%; float: left;">
            <i class="fa fa-plus fa-2x" style="float: right;" ng-click="addLog.addEmotionValue()"></i>
            <datalist id="emotions">
                <option ng-repeat="emotion in addLog.emotions" data-id="{{emotion.id}}" value="{{emotion.emotion}}">
            </datalist>
        </p>
        <p>
        </p>
        <label>
            <h3>What have you eaten?</h3>
            <input type="text" placeholder="" list="food">
            <datalist id="food">
                <option ng-repeat="food in addLog.foods" data-id="{{food.id}}" value="{{food.food}}">
            </datalist>
        </label>
        <label>
            <textarea placeholder="Any notes?" rows="5"></textarea>
        </label>

        <button style="width: 100%;">Add log</button>
    </form>

</section>
