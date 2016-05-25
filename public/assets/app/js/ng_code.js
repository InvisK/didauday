

app.controller('CodeCreateController', function ($scope, $http) {
    var vm = $scope;
    $http.get('http://localhost/didauday/code/get-unit').success(function (res) {
        vm.code_unit = res;
        console.log(res);
    });

    vm.code_amount = [
        {value: 5, text: '5'},
        {value: 10, text: '10'},
        {value: 20, text: '20'},
        {value: 30, text: '30'},
    ];

    vm.code_lenght = [
        {value: 5, text: '5'},
        {value: 8, text: '8'},
        {value: 12, text: '12'},
    ];

    vm.code_limit = [
        {value: 0, text: '0'},
        {value: 1, text: '1'},
        {value: 5, text: '5'},
    ];

    vm.codes = [
        {id : 1, keyword : '', start_word : '', value : '', unit : 1, amount : 5, lenght : 5, limit : 1}
    ];

    vm.addCode = addCode;

    function addCode() {
        vm.inserted = {
            id: vm.codes.length+1,
            keyword: '',
            start_word: '',
            value: '',
            unit : 1,
            amount : 5,
            lenght : 5,
            limit : 1
        };
        vm.codes.push(vm.inserted);
    };

});