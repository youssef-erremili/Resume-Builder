document.addEventListener('DOMContentLoaded', () => {
    fetchJobs();
});

function fetchJobs() {
    fetch("https://api.adzuna.com/v1/api/jobs/gb/search/1?app_id=449f6b2c&app_key=e003a5b5f13578e90afaf9626a70bf3d")
        .then(response => response.json())
        .then(data => {
            displayJobs(data.results);
            document.getElementById('loader').classList.add('hidden');
            document.getElementById('jobsContainer').classList.remove('hidden');
        })
        .catch(error => {
            console.error('Error fetching jobs:', error);
            document.getElementById('loader').classList.add('hidden');
        });
}

function displayJobs(jobs) {
    const jobsContainer = document.getElementById('jobsContainer');
    jobsContainer.innerHTML = '';
    jobs.forEach(job => {
        const jobElement = document.createElement('div');
        jobElement.className = 'job';
        jobElement.innerHTML = `
            <h2>${job.title}</h2>
            <div class="info">
                <div>
                    <strong>company :</strong>
                    <p>${job.company.display_name}</p>
                </div>
                <div>
                    <strong>location :</strong>
                    <p>${job.location.display_name}</p>
                </div>
                <div>
                    <strong>contract type :</strong>
                    <p>${job.contract_type}</p>
                </div>
                <div>
                    <strong>contract time :</strong>
                    <p>${job.contract_time}</p>
                </div>
                <div>
                    <strong>salary :</strong>
                    <p>${job.salary_max ? job.salary_max : 'Salary not provided'}US</p>
                </div>
            </div>
            <span id="category">${job.category.label}</span>
            <p class="description">${job.description.substring(0, 150)}</p>
            <a href="${job.redirect_url}" target="_blank">Apply Now</a>
        `;
        jobsContainer.appendChild(jobElement);
    });
}



/*{<p class="company"><strong>company :</strong> ${job.company.display_name}</p>
<p class="location"><strong>location :</strong> ${job.location.display_name}</p>
<p class="salary"><strong>salary :</strong> ${job.salary_max ? job.salary_max : 'Salary not provided'}US</p>}*/