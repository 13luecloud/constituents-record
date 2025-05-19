const Barangay = ({ barangays }) => {
    return (
        <div>
            <h2> Barangay Page </h2>
            <table>
                <thead>
                    <tr>
                        <td>
                            No.
                        </td>
                        <td>
                            Name
                        </td>
                        <td>
                            City
                        </td>
                    </tr>
                </thead>
                
                <tbody>
                    {barangays.map((barangay, index) => {
                       return ( 
                            <tr key={barangay.id}>
                                <td>
                                    {index+1}.
                                </td>
                                <td>
                                    {barangay.name}
                                </td>
                                <td>
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