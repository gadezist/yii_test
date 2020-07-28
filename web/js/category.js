
$(document).ready(function () {
    $('#jstree').jstree({
        'core': {
            'data': {
                'url': 'http://testyii/index.php?r=category/tree',
                'data': function (node) {
                    return {'id': node.id}
                }
            }
        }
    });
})
