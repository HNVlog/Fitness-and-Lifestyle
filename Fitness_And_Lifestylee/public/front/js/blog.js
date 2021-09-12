function getCategory(CategoryName)
    {
    var link=location.origin+location.pathname+'?category='+CategoryName;
    location.href=link;
}

function getPage(PageNumber)
    {
        var link=location.origin+location.pathname+'?page='+PageNumber;
        location.href=link;
}
