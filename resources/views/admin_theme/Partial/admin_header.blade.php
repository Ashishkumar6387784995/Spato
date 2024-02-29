<style>
     p span {
          font-weight: 800;
          font-size: 18px;
     }
</style>

<div class="" style="border-bottom: 2px solid #44e1d5;  margin-top:-1.5rem;">

     @if($role=="admin")
     <h2>Admin Dashboard</h2>
     @elseif($role=="b2b")
     <h2>b2b Dashboard</h2>

     @elseif($role=="supplier")
     <h2>Supplier Dashboard</h2>
     @endif

     <p>{{ now()->format('l, F j, Y') }}</p>
     <p><span>Alex Driver </span> Login as <span> Admin</span></p>
</div>