
function addObjectif(listId, inputName, placeholder) {
    var objectifsList = document.querySelector(listId);

    var newObjectifInput = document.createElement('input');
    newObjectifInput.type = 'text';
    newObjectifInput.classList.add('border', 'border-gray-200', 'rounded', 'p-2', 'w-full', 'form-control');
    newObjectifInput.name = inputName;
    newObjectifInput.placeholder = placeholder;

    var newObjectifListItem = document.createElement('li');
    newObjectifListItem.classList.add('list-group-item', 'mt-1' ,'mb-2');
    newObjectifListItem.appendChild(newObjectifInput);

    objectifsList.appendChild(newObjectifListItem);
}