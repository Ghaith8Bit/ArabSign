function changePageParameter(param) {
    const queryParams = new URLSearchParams(window.location.search);
    queryParams.set('page', param);
    window.location.href = `${window.location.pathname}?${queryParams.toString()}`;
}

function changeQueryParameter(value) {
    const queryParams = new URLSearchParams(window.location.search);

    // Add or update the specified parameter
    if (value) {
        queryParams.set('query', value);
    } else {
        queryParams.delete('query');
    }
    queryParams.delete('page');

    window.location.href = `${window.location.pathname}?${queryParams.toString()}`;
}

function changeCategoryParameter(category) {
    const queryParams = new URLSearchParams(window.location.search);

    categoryLength = JSON.parse(category).length;
    // Add or update the specified parameter
    if (categoryLength > 0) {
        queryParams.set('category', category);
    } else {
        queryParams.delete('category');
    }
    queryParams.delete('page');

    window.location.href = `${window.location.pathname}?${queryParams.toString()}`;
}

