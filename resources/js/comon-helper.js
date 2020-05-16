const arrDataToOptionItem  = (acc, item ) => {
    acc += '<option value="' + item.id + '">' + item.name + '</option>';
    return acc;
};

exports.arrDataToOptionItem = arrDataToOptionItem;