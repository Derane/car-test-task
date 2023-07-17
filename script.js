function addOwner() {
    const ownersDiv = document.getElementById('owners');

    const ownerDiv = document.createElement('div');
    ownerDiv.className = 'owner';

    const nameLabel = document.createElement('label');
    nameLabel.textContent = 'Имя владельца:';
    const nameInput = document.createElement('input');
    nameInput.type = 'text';
    nameInput.name = 'owner_name[]';
    nameInput.required = true;

    const ageLabel = document.createElement('label');
    ageLabel.textContent = 'Возраст владельца:';
    const ageInput = document.createElement('input');
    ageInput.type = 'text';
    ageInput.name = 'owner_age[]';
    ageInput.required = true;

    ownerDiv.appendChild(nameLabel);
    ownerDiv.appendChild(nameInput);
    ownerDiv.appendChild(ageLabel);
    ownerDiv.appendChild(ageInput);

    ownersDiv.appendChild(ownerDiv);
}