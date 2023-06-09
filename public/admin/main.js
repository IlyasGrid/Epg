
function addObjectif(listId, inputName, placeholder) {
    var objectifsList = document.querySelector(listId);

    var newObjectifInput = document.createElement('input');
    newObjectifInput.type = 'text';
    newObjectifInput.classList.add('border', 'border-gray-200', 'rounded', 'p-2', 'w-full', 'form-control');
    newObjectifInput.name = inputName;
    newObjectifInput.placeholder = placeholder;

    var button = document.createElement('button');
    button.classList.add('btn' ,'btn-outline-danger','clear-btn','ml-5');
    button.setAttribute('type','button');
    button.setAttribute('title','Clear input');
    button.setAttribute('onclick','clearInput(this)');

    var icon = document.createElement('i');
    icon.classList.add('fas','fa-times-circle');

    


    var newObjectifListItem = document.createElement('li');
    newObjectifListItem.classList.add('list-group-item', 'mt-1' ,'mb-2','d-flex','justify-content-around');

    button.appendChild(icon);

    newObjectifListItem.appendChild(newObjectifInput);
    newObjectifListItem.appendChild(button);

    objectifsList.appendChild(newObjectifListItem);
}

function clearInput(element) {
    var input = element.previousElementSibling;
    input.value = '';
    input.focus();
    
    // var parentDiv = element.parentNode;
    // parentDiv.parentNode.removeChild(parentDiv);
  }