<li class="{{Request::is('author/dashboard')?'active':''}}"><a href="author/dashboard">Dashboard</a></li>
<li class="{{Request::is('author/submit-menuscript')?'active':''}}"><a href="author/submit-menuscript">Submit
        Menuscript</a></li>
<li class="{{Request::is('author/pending-issue')?'active':''}}"><a href="author/pending-issue">Pending Issue</a></li>
<li class="{{Request::is('author/submitted-issue')?'active':''}}"><a href="author/submitted-issue">Submitted Issue</a>
</li>
<li class="{{Request::is('author/published')?'active':''}}"><a href="author/published">Published Paper</a></li>
<li class="{{Request::is('author/rejected')?'active':''}}"><a href="author/rejected">Rejected Paper</a></li>
<li class="{{Request::is('author/profile')?'active':''}}"><a href="author/profile">Update Profile</a></li>
<li class="{{Request::is('author/update-password')?'active':''}}"><a href="author/update-password">Update Password</a>
</li>
<li><a href="logout">Logout</a></li>