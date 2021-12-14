var wizard = $("claims-form");
wizard.steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "fade",
    stepsOrientation: "vertical",
    enablePagination: true,
    titleTemplate: '<span class="number">#index#</span>',
    onStepChanging: function(event, currentIndex, newIndex) {
        console.log(currentIndex + ' to ' + +newIndex)
    }
})