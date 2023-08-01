function parseBeneficiaries(message) {
    let toSend = '<strong>Who will benefit:</strong> <br> <br>';
    let sentences = message.split('\n');

    for (let i = 0; i < sentences.length; i++) {
        let sentence = sentences[i];
        toSend += sentence;

        if (i != sentences.length - 1) {
            toSend += '<br><br>';
        }
    }

    return toSend;
}

function parseActions(message) {
    let toSend = '';
    let sentences = message.split('\n');

    for (let i = 0; i < sentences.length; i++) {
        let sentence = sentences[i];
        let items = sentence.split(': ');
        toSend += '<li><strong>' + items[0] + ': ' + '</strong>' +
            items[1] + '</li>';

        if (i != sentences.length - 1) {
            toSend += '<br>'
        }
    }

    return toSend;
}

// The h1 of the page
const services = [
    'Professional Advice',
    'Tax Advising',
    'Consulting'
];

// Found in the right side of the title section of the page
const serviceDescriptions = [
    'Our Professional Advice service provides personalized and expert guidance ' +
    'to individuals and businesses seeking to make informed decisions and achieve their goals.',
    'Our Tax Advising service is designed to help individuals and businesses ' +
    'navigate the complexities of taxation and optimize their tax planning and compliance.',
    'Our Consulting service offers strategic insights and innovative solutions ' +
    'to empower organizations for success.'
];

// Found in the left side of the service page
const serviceCaptions = [
    'Whether you\'re a budding entrepreneur or a seasoned professional, our team ' +
    'of experienced advisors is here to support you on your journey to success.',
    'With our team of tax experts, you can ensure that you stay compliant with tax ' +
    'regulations while maximizing your tax benefits.',
    'From start-ups to established enterprises, we collaborate closely with our clients ' +
    'to identify opportunities for growth, streamline operations, and tackle complex challenges.'
];

// Found in the bottom-left side of the service page
const serviceBeneficiaries = [
    //first
    'Individuals seeking career guidance and personal development.\nStart-ups and ' +
    'small businesses in need of strategic planning and mentorship.\nEstablished ' +
    'companies looking to optimize their operations and achieve sustainable growth.',
    // second
    'Individuals seeking assistance with personal income tax planning and filing.' +
    '\nSmall businesses looking to optimize their tax strategies and reduce tax ' +
    'liabilities.\nCorporations and enterprises requiring comprehensive tax planning ' +
    'and compliance solutions.',
    // third
    'Start-ups and entrepreneurs seeking guidance on business planning and market entry.' +
    '\nEstablished businesses aiming to revitalize their strategies and stay competitive.' +
    '\nOrganizations facing specific challenges and seeking expert advice and solutions.',
];

// Found in the middle of the page
const serviceActions = [
    // first
    'Personalized Consultations: Receive one-on-one consultations tailored to your specific ' +
    'needs and objectives.\nStrategic Planning: Develop a clear roadmap and actionable strategies ' +
    'to achieve your financial and professional goals.\nCareer Development: Get guidance on ' +
    'career advancements, skill development, and achieving work-life balance.\nInvestment Insights: ' +
    'Access expert advice on investment opportunities and risk management.',
    // second
    'Personalized Tax Consultations: Discuss your tax concerns and receive customized advice based ' +
    'on your financial situation.\nTax Planning: Strategize to minimize tax liabilities and identify ' +
    'opportunities for tax savings.\nTax Compliance: Ensure accurate and timely filing of tax returns ' +
    'and adherence to tax regulations.\nBusiness Tax Solutions: Get expert guidance on tax implications ' +
    'related to business structures, mergers, and acquisitions.',
    // third
    'Business Strategy Development: Craft tailored strategies aligned with your organizational goals and ' +
    'industry trends.\nProcess Optimization: Identify areas for improvement and implement streamlined ' +
    'processes for enhanced efficiency.\nMarket Analysis: Conduct in-depth market research to gain a ' +
    'competitive edge and identify growth opportunities.\nChange Management: Support your team through ' +
    'organizational changes and foster a culture of innovation.'
];

// extract cookie--extract ServiceId in the process
var cookies = document.cookie.split(';').
    map(el => el.split("=")).
    reduce((prev, cur) => {
        prev[cur[0]] = cur[1];
        return prev;
    }, {});

const serviceId = cookies['ServiceId'] - 1;

// set content based on ServiceId
const service = document.getElementById('service');
service.innerHTML = services[serviceId];

const serviceDescription = document.getElementById('service-description');
serviceDescription.innerHTML = serviceDescriptions[serviceId];

const serviceCaption = document.getElementById('service-caption');
serviceCaption.innerHTML = serviceCaptions[serviceId];

const serviceBenefit = document.getElementById('service-beneficiaries');
serviceBenefit.innerHTML = parseBeneficiaries(serviceBeneficiaries[serviceId]);

const serviceAction = document.getElementById('service-actions');
serviceAction.innerHTML = parseActions(serviceActions[serviceId]);