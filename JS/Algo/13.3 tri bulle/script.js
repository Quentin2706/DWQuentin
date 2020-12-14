var array = new Array(2, 8, 98, 63, 999, 52);

for (var i = 0; i < array.length; i++) {
    var temp;
    for (var j = 0; j < array.length; j++) {
        if (array[j] > array[i]) {
            temp = array[j];
            array[j] = array[i];
            array[i] = temp;
        }
    }

}

for (var i = 0; i < array.length; i++) {
    document.write(array[i] + "\n")
}
