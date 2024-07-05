let experienceCount = 1;

function addExperience() {
    experienceCount++;
    const tableBody = document.getElementById('experienceTableBody');
    const experienceFields = [
        { label: 'Company', name: 'com' },
        { label: 'Year', name: 'comyear' },
        { label: 'Position', name: 'compos' },
        { label: 'Description', name: 'comdes' },
    ];

    experienceFields.forEach(field => {
        const newRow = document.createElement('div');
        newRow.innerHTML = `
            <label for="${field.name}${experienceCount}">${field.label}</label>
            <input type="${field.name === 'comdes' ? 'textarea' : 'text'}" id="${field.name}${experienceCount}" name="${field.name}${experienceCount}" placeholder="Enter ${field.label}" ${field.name === 'comdes' ? 'style="height: 100px; width: 75vh; overflow: auto;"' : ''} required>
        `;
        tableBody.appendChild(newRow);
    });
}

var skillCounter = 1;
function addSkillField() {
    skillCounter++;
    var table = document.getElementById("skillTable");
    var newRow = document.createElement('div');
    newRow.innerHTML = `
        <label for="skill${skillCounter}">Skills</label>
        <input type="text" id="skill${skillCounter}" name="skill${skillCounter}" placeholder="Enter Skill" required>
    `;
    table.appendChild(newRow);
}

var interestCounter = 1;
function addInterestField() {
    interestCounter++;
    var table = document.getElementById("interestTable");
    var newRow = document.createElement('div');
    newRow.innerHTML = `
        <label for="inter${interestCounter}">Interests</label>
        <input type="text" id="inter${interestCounter}" name="inter${interestCounter}" placeholder="Enter Interest" required>
    `;
    table.appendChild(newRow);
}

var languageCounter = 1;
function addLanguageField() {
    languageCounter++;
    var table = document.getElementById("languageTable");
    var newRow = document.createElement('div');
    newRow.innerHTML = `
        <label for="lang${languageCounter}">Foreign Language</label>
        <input type="text" id="lang${languageCounter}" name="lang${languageCounter}" placeholder="Enter Language" required>
    `;
    table.appendChild(newRow);
}