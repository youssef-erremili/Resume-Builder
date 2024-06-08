-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2024 at 03:51 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resume-builder`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(2) NOT NULL,
  `title_content` varchar(225) NOT NULL,
  `blog_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `title_content`, `blog_content`) VALUES
(1, 'Crafting an Impressive Resume: A Step-by-Step Guide for Success', '<h4 class=\"intro\">Introduction:</h4>\n <p>In the competitive job market, your resume is your first introduction to potential employers.\n Crafting a compelling and well-structured resume is crucial for making a lasting impression. This\n comprehensive guide will walk you through the essential steps to create a standout resume that\n effectively showcases your skills, experiences, and qualifications.</p>\n <h3 class=\"subTitle\">Understanding the Purpose of a Resume:</h3>\n <p>Your resume is not just a piece of paper; it\'s your first opportunity to make a lasting impression on\n potential employers. In today\'s competitive job market, it serves as a personal marketing tool,\n allowing you to stand out and showcase your unique strengths and experiences. Learn how to craft a\n compelling resume that not only tells your professional story but also captures the attention of\n hiring managers.</p>\n <h3 class=\"subTitle\">Structuring Your Resume:</h3>\n <p>When it comes to structuring your resume, organization is key. Break down your resume into key\n sections such as the header, personal statement, work experience, education, skills, and additional\n details. Understanding the optimal order and arrangement of these sections is crucial to ensure that\n your resume has maximum impact and presents a clear and coherent narrative of your professional\n journey.</p>\n <h3 class=\"subTitle\">Crafting a Compelling Personal Statement:</h3>\n <p>Your personal statement is the gateway to your resume. It\'s your chance to make a strong first\n impression and capture the interest of recruiters. Master the art of writing a summary that not only\n highlights your skills and experiences but also aligns seamlessly with the specific job you\'re\n applying for. Tailor your personal statement to create a connection with potential employers and\n make them eager to learn more about you.</p>\n <h3 class=\"subTitle\">Showcasing Your Work Experience:</h3>\n <p>Effectively presenting your work experience is crucial in demonstrating your value to potential\n employers. Highlight your achievements and results in each role, providing concrete examples of your\n contributions. Whether it\'s increasing sales, streamlining processes, or leading successful\n projects, showcase the impact you\'ve made in each position. Tailoring your resume for different jobs\n and industries ensures that you emphasize the experiences most relevant to each application.</p>\n <h3 class=\"subTitle\">Highlighting Your Education and Qualifications:</h3>\n <p>Your educational background and qualifications are an integral part of your resume. Showcase your\n academic achievements and any additional qualifications that align with your career goals. Whether\n you\'ve earned degrees, certifications, or completed relevant training, clearly communicate your\n commitment to learning and professional development. This section provides context for your skills\n and experiences, giving employers a holistic view of your qualifications.</p>\n <h3 class=\"subTitle\">Strategic Use of Skills and Keywords:</h3>\n <p>Identifying and incorporating relevant skills is essential in making your resume stand out. Carefully\n analyze the job requirements and align your skills accordingly. Additionally, strategically use\n keywords that are commonly used in the industry and job description. This not only helps your resume\n pass through automated applicant tracking systems (ATS) but also demonstrates your familiarity with\n industry language and trends.</p>\n <h3 class=\"subTitle\">Adding a Personal Touch:</h3>\n <p>While the professional aspects of your resume are crucial, adding a personal touch can set you apart.\n Consider including additional sections that highlight your personality and interests, such as\n volunteer work, hobbies, or languages spoken. This not only provides a more holistic view of who you\n are but also helps you connect with potential employers on a personal level.</p>\n <h3 class=\"subTitle\">Formatting and Design Tips:</h3>\n <p>The visual presentation of your resume is as important as its content. Learn simple and effective\n ways to format your resume for clarity and professionalism. Use fonts that are easy to read, utilize\n bullet points for concise information, and leverage white space to avoid a cluttered appearance. A\n well-designed resume not only enhances readability but also showcases your attention to detail and\n commitment to professionalism.</p>\n <h3 class=\"subTitle\">Proofreading and Editing:</h3>\n <p>Before submitting your resume, take the time to thoroughly proofread and edit. Eliminate any\n grammatical errors, typos, or inconsistencies. Consider seeking feedback from friends, mentors, or\n colleagues to gain different perspectives. A polished and error-free resume reflects your commitment\n to quality and professionalism, increasing your chances of making a positive impression on potential\n employers.</p>\n <h3 class=\"subTitle\">Adapting Your Resume for Different Roles:</h3>\n <p>Recognize the importance of tailoring your resume for each job application. Customize your resume to\n highlight the most relevant skills and experiences that align with the specific requirements of each\n role. This targeted approach not only demonstrates your understanding of the job but also increases\n the likelihood of your resume catching the eye of hiring managers. One size does not fit all, and\n adapting your resume for different roles showcases your versatility and suitability for diverse\n opportunities.</p>\n <h3 class=\"subTitle\">Conclusion:</h3>\n <p>Crafting an impressive resume is a continuous process that evolves with your career. This\n comprehensive guide provides easy-to-follow insights and practical tips to help you create a resume\n that not only reflects your professional journey but also captivates employers. By following these\n steps, you pave the way for success in your job search, positioning yourself as a standout candidate\n ready to contribute to your desired field.</p>'),
(2, 'We Give you a glance about us and how we create this project', '<h4 class=\"intro\">Introduction:</h4>\r\n            <p>Welcome to our Resume Builder, your ultimate destination for crafting professional and impactful resumes.\r\n               Our mission is to provide job seekers with a simple yet powerful tool to create resumes that highlight\r\n               their strengths and experiences, helping them stand out in the competitive job market.</p>\r\n            \r\n            <h3 class=\"subTitle\">Our Mission:</h3>\r\n            <p>At our core, we believe that every individual deserves the opportunity to present their skills and\r\n               qualifications in the best possible light. We are committed to guiding you through the resume creation process,\r\n               ensuring that your final product is polished and professional.</p>\r\n            \r\n            <h3 class=\"subTitle\">User-Friendly Platform:</h3>\r\n            <p>Our platform is designed with simplicity and ease of use in mind. We provide customizable templates and expert\r\n               tips to help you create a resume that reflects your unique background and career goals, whether you\'re a recent\r\n               graduate, a seasoned professional, or making a career change.</p>\r\n            \r\n            <h3 class=\"subTitle\">Why Choose Us:</h3>\r\n            <p>Our Resume Builder stands out because of its comprehensive approach to resume crafting. We offer detailed\r\n               guidance on structuring your resume, crafting compelling personal statements, and strategically using skills\r\n               and keywords to pass through applicant tracking systems (ATS).</p>\r\n            \r\n            <h3 class=\"subTitle\">Our Commitment:</h3>\r\n            <p>We are dedicated to continuous improvement and staying updated with the latest trends in resume writing and job\r\n               searching. Our goal is to empower you with the tools and knowledge needed to succeed in your career endeavors.</p>\r\n            \r\n            <h3 class=\"subTitle\">Join Us:</h3>\r\n            <p>Join us in transforming the way you present yourself to potential employers. Take the first step towards achieving\r\n               your career aspirations with confidence using our Resume Builder.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE `templates` (
  `resume_id` int(11) NOT NULL,
  `resume_name` varchar(255) NOT NULL,
  `resume_description` varchar(255) NOT NULL,
  `resume_image` varchar(255) NOT NULL,
  `resume_template` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`resume_id`, `resume_name`, `resume_description`, `resume_image`, `resume_template`) VALUES
(1, 'modern resume', 'Bold and forward structure that’s impossible to ignore. When you really need to impress and showcase your profile.', '../assets/image/first-template.png', '<main id=\"resume-container\" style=\"overflow: hidden;;font-family: \'Poppins\', sans-serif; list-style-type: none; text-decoration: none;\">\n                    <div class=\"templateContainer\" style=\"width: 785px; overflow: hidden; height: 1090px; padding: 0.8rem 1.5rem;\">\n                        <header style=\"display: flex; align-items: flex-start; justify-content: space-between; padding: 0 4rem; padding-block: inherit;\">\n                            <div class=\"names\">\n                                <h1 style=\"font-size: 3.5rem; text-transform: uppercase; line-height: 1.2; font-weight: 500;\">\n                                    <strong id=\"first-name-cv\"></strong>\n                                </h1>\n                                <h1 id=\"last-name-cv\" style=\"font-size: 3.5rem; text-transform: uppercase; line-height: 1.2; font-weight: 500;\">\n                                </h1>\n                                <span id=\"headline-cv\" class=\"headline\" style=\"font-weight: 400; font-size: 1.2rem; color: #9f9f9f; text-transform: uppercase;\"></span>\n                            </div>\n                            <div class=\"socials\" style=\"margin-top: 0.4rem;\">\n                                <ul>\n                                    <li style=\"margin: 0.2rem 0; font-size: 0.99rem;\"><i class=\"ri-map-pin-2-line\" style=\"display: inline-block; background-color: #eee305; padding: 4px; border-radius: 6px; margin-right: 0.4rem;\"></i><span id=\"address-location-cv\"></span></li>\n                                    <li style=\"margin: 0.2rem 0; font-size: 0.99rem;\"><i class=\"ri-smartphone-line\" style=\"display: inline-block; background-color: #eee305; padding: 4px; border-radius: 6px; margin-right: 0.4rem;\"></i><span id=\"phone-cv\"></span></li>\n                                    <li style=\"margin: 0.2rem 0; font-size: 0.99rem;\"><i class=\"ri-mail-line\" style=\"display: inline-block; background-color: #eee305; padding: 4px; border-radius: 6px; margin-right: 0.4rem;\"></i><span id=\"email-cv\"></span></li>\n                                    <li style=\"margin: 0.2rem 0; font-size: 0.99rem;\"><i class=\"ri-calendar-line\" style=\"display: inline-block; background-color: #eee305; padding: 4px; border-radius: 6px; margin-right: 0.4rem;\"></i><span id=\"date-birth-cv\"></span></li>\n                                </ul>\n                            </div>\n                        </header>\n                        <div style=\"width: inherit; height: inherit; display: flex;\">\n                            <div class=\"column colthin\" style=\"height: inherit; width: 40%; border-right: 2px solid #d6d8d6;\">\n                                <div class=\"image\" style=\"width: 100%; text-align: center;\">\n                                    <img src=\"../assets/image/user.png\" id=\"profile\" style=\"width: 7rem; height: 8rem; object-fit: fill; border-radius: 6px;\">\n                                </div>\n                                <div style=\"margin: -0.4rem 0 0 0.5rem;\">\n                                    <h2 style=\"font-size: 2rem; text-transform: uppercase; margin: 1.5rem 0 0.5rem 0;\">\n                                        education</h2>\n                                    <div id=\"col_education\" style=\"text-transform: capitalize;\"></div>\n                                </div>\n                                <div style=\"margin: -0.4rem 0 0 0.5rem;\">\n                                    <h2 style=\"font-size: 2rem; text-transform: uppercase; margin: 1.5rem 0 0.5rem 0;\">\n                                        skills</h2>\n                                    <div id=\"col_skills\"></div>\n                                </div>\n                                <div style=\"margin: -0.4rem 0 0 0.5rem;\">\n                                    <h2 style=\"font-size: 2rem; text-transform: uppercase; margin: 1.5rem 0 0.5rem 0;\">\n                                        languages</h2>\n                                    <div id=\"col_language\"></div>\n                                </div>\n                                <div style=\"margin: -0.4rem 0 0 0.5rem;\">\n                                    <h2 style=\"font-size: 2rem; text-transform: uppercase; margin: 1.5rem 0 0.5rem 0;\">\n                                        hoppies</h2>\n                                    <div id=\"col_hoppy\"></div>\n                                </div>\n                            </div>\n                            <div class=\"column colbold\" style=\"height: inherit; width: 60%; padding: 0 2rem;\">\n                                <div class=\"about-user\" style=\"border-bottom: 2px solid #eaeaea; padding-bottom: 2rem;\">\n                                    <h2 style=\"font-size: 2rem; text-transform: uppercase; margin: 1.5rem 0 0.5rem 0;\">\n                                        about me</h2>\n                                    <p id=\"about-me-cv\" style=\"font-size: 1.01rem; font-weight: 400; color: #8d8d8d; margin: 0.3rem 0;\">\n                                    </p>\n                                </div>\n                                <div class=\"experience-user\">\n                                    <h2 style=\"font-size: 2rem; text-transform: uppercase; margin: 1.5rem 0 0.5rem 0;\">\n                                        experience</h2>\n                                    <div id=\"col_experience\" style=\"margin: 1.5rem 0;\"></div>\n                                </div>\n                            </div>\n                        </div>\n                    </div>\n                </main>'),
(2, 'Dublin', 'Bold and forward structure that’s impossible to ignore. When you really need to impress and showcase your profile.', '../assets/image/second-template.png', '<main id=\"resume-container\" style=\"overflow: hidden;font-family: \'Poppins\', sans-serif; list-style-type: none; text-decoration: none;\">                     <div class=\"templateContainer\" style=\"width: 785px; overflow: hidden; height: 1090px; padding: 0.8rem 1.5rem;\">                         <header style=\"display: flex; align-items: flex-start; justify-content: space-between; padding: 0 4rem; padding-block: inherit;\">                             <div class=\"names\">                                 <h1 style=\"font-size: 3.5rem; text-transform: uppercase; line-height: 1.2; font-weight: 500;\">                                     <strong id=\"first-name-cv\"></strong>                                 </h1>                                 <h1 id=\"last-name-cv\" style=\"font-size: 3.5rem; text-transform: uppercase; line-height: 1.2; font-weight: 500;\">                                 </h1>                                 <span id=\"headline-cv\" class=\"headline\" style=\"font-weight: 400; font-size: 1.2rem; color: #9f9f9f; text-transform: uppercase;\"></span>                             </div>                             <div class=\"socials\" style=\"margin-top: 0.4rem;\">                                 <ul>                                     <li style=\"margin: 0.2rem 0; font-size: 0.99rem;\"><i class=\"ri-map-pin-2-line\" style=\"display: inline-block; padding: 4px; border-radius: 6px; margin-right: 0.4rem;\"></i><span id=\"address-location-cv\"></span></li>                                     <li style=\"margin: 0.2rem 0; font-size: 0.99rem;\"><i class=\"ri-smartphone-line\" style=\"display: inline-block; padding: 4px; border-radius: 6px; margin-right: 0.4rem;\"></i><span id=\"phone-cv\"></span></li>                                     <li style=\"margin: 0.2rem 0; font-size: 0.99rem;\"><i class=\"ri-mail-line\" style=\"display: inline-block; padding: 4px; border-radius: 6px; margin-right: 0.4rem;\"></i><span id=\"email-cv\"></span></li>                                     <li style=\"margin: 0.2rem 0; font-size: 0.99rem;\"><i class=\"ri-calendar-line\" style=\"display: inline-block; padding: 4px; border-radius: 6px; margin-right: 0.4rem;\"></i><span id=\"date-birth-cv\"></span></li>                                 </ul>                             </div>                         </header>                         <div style=\"width: inherit; height: inherit; display: flex;\">                             <div class=\"column colthin\" style=\"height: inherit; width: 40%; border-right: 2px solid #d6d8d6;\">                                 <div class=\"image\" style=\"width: 100%; text-align: center;\">                                     <img src=\"../assets/image/user.png\" id=\"profile\" style=\"width: 7rem; height: 8rem; object-fit: fill; border-radius: 6px;\">                                 </div>                                 <div style=\"margin: -0.4rem 0 0 0.5rem;\">                                     <h2 style=\"text-align: center;font-size: 1.25rem;background-color: #27384C; display: inline-block; color:#eaeaea; padding: 0.3rem 4.4rem; width:90%; border-radius: 0.2rem;font-weight: 400;text-transform: uppercase; ;margin: 1.5rem 0 0.5rem 0;\">                                         education</h2>                                     <div id=\"col_education\" style=\"text-transform: capitalize;\"></div>                                 </div>                                 <div style=\"margin: -0.4rem 0 0 0.5rem;\">                                     <h2 style=\"text-align: center;font-size: 1.25rem;background-color: #27384C; display: inline-block; color:#eaeaea; padding: 0.3rem 4.4rem; width:90%; border-radius: 0.2rem;font-weight: 400;text-transform: uppercase; ;margin: 1.5rem 0 0.5rem 0;\">                                         skills</h2>                                     <div id=\"col_skills\"></div>                                 </div>                                 <div style=\"margin: -0.4rem 0 0 0.5rem;\">                                     <h2 style=\"text-align: center;font-size: 1.25rem;background-color: #27384C; display: inline-block; color:#eaeaea; padding: 0.3rem 4.4rem; width:90%; border-radius: 0.2rem;font-weight: 400;text-transform: uppercase; ;margin: 1.5rem 0 0.5rem 0;\">                                         languages</h2>                                     <div id=\"col_language\"></div>                                 </div>                                 <div style=\"margin: -0.4rem 0 0 0.5rem;\">                                     <h2 style=\"text-align: center;font-size: 1.25rem;background-color: #27384C; display: inline-block; color:#eaeaea; padding: 0.3rem 4.4rem; width:90%; border-radius: 0.2rem;font-weight: 400;text-transform: uppercase; ;margin: 1.5rem 0 0.5rem 0;\">                                         hoppies</h2>                                     <div id=\"col_hoppy\"></div>                                 </div>                             </div>                             <div class=\"column colbold\" style=\"height: inherit; width: 60%; padding: 0 2rem;\">                                 <div class=\"about-user\" style=\"border-bottom: 2px solid #eaeaea; padding-bottom: 2rem;\">                                     <h2 style=\"text-align: center;font-size: 1.25rem;background-color: #27384C; display: inline-block; color:#eaeaea; padding: 0.3rem 4.4rem; width:90%; border-radius: 0.2rem;font-weight: 400;text-transform: uppercase; ;margin: 1.5rem 0 0.5rem 0;\">                                         about me</h2>                                     <p id=\"about-me-cv\" style=\"font-size: 1.01rem; font-weight: 400; color: #8d8d8d; margin: 0.3rem 0;\">                                     </p>                                 </div>                                 <div class=\"experience-user\">                                     <h2 style=\"text-align: center;font-size: 1.25rem;background-color: #27384C; display: inline-block; color:#eaeaea; padding: 0.3rem 4.4rem; width:90%; border-radius: 0.2rem;font-weight: 400;text-transform: uppercase; ;margin: 1.5rem 0 0.5rem 0;\">                                         experience</h2>                                     <div id=\"col_experience\" style=\"margin: 1.5rem 0;\"></div>                                 </div>                             </div>                         </div>                     </div>                 </main>'),
(4, 'london', 'Bold and forward structure that’s impossible to ignore. When you really need to impress and showcase your profile.', '../assets/image/first-template.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `resume_id` int(11) DEFAULT NULL,
  `register_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `email_address`, `user_password`, `resume_id`, `register_date`) VALUES
(44, 'test', 'test@gmail.com', 't3Yest@gmail.com', NULL, '2024-05-26'),
(45, 'youssef erremili', 'yousseferremili@gmail.com', '$2y$10$k89hzp92qPPDW1ZabbzazuENuZHo7AZRGPSVRqA3zSoU2LUm5zJsW', NULL, '2024-05-27'),
(46, 'test test', 'yousseferremili1@gmail.com', '$2y$10$ogqrh/3.fhfGxa5XYeGhtu.0qQrUnmWAzzREbsGCcGga2KYXXGdzO', NULL, '2024-05-29'),
(47, 'youssef erremili', 'yousseferremili19@gmail.com', '$2y$10$4S/8kylRpnZ/O0w0xmWVyeOHJwPR9/.XVcgtkuvIxyeLYpm3ROL72', NULL, '2024-05-29'),
(48, 'mohammed erremili', 'mohammederremili19@gmail.com', '$2y$10$.8uvw5UFWlQqU.YAhrYA7.OeaAcb85atkX0gsKGcSEDImx7yykczq', NULL, '2024-05-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`resume_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `fk_resume` (`resume_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `resume_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_resume` FOREIGN KEY (`resume_id`) REFERENCES `templates` (`resume_id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
