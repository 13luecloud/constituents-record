const Barangay = ({ barangays }) => {
    return (
        <div>
            <h2> Barangay Page </h2>
            <table>
                <thead>
                    <tr>
                       <td style={{padding: '15px'}}>
                            No.
                        </td>
                        <td style={{padding: '15px'}}>
                            Name
                        </td>
                       <td style={{padding: '15px'}}>
                            City
                        </td>
                    </tr>
                </thead>
                
                <tbody>
                    {barangays.map((barangay, index) => {
                       return ( 
                            <tr key={barangay.id}>
                                <td style={{padding: '15px'}}>
                                    {index+1}.
                                </td>
                                <td style={{padding: '15px'}}>
                                    {barangay.name} 
                                </td>
                                <td style={{padding: '15px'}}>
                                    {barangay.city.name}
                                </td>
                            </tr>
                        )
                    })}
                </tbody>
            </table>
        </div>
    )
}

export default Barangay